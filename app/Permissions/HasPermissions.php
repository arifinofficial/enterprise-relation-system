<?php

namespace App\Permissions;

use App\Role;
use App\Permission;

trait HasPermissions
{
    protected function hasPermission($permission)
    {
        return (bool) $this->permissions->where('name', $permission->name)->count();
    }

    protected function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }

        return false;
    }

    protected function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('name', $permissions)->get();
    }

    protected function getAllRoles(array $roles)
    {
        return Role::whereIn('name', $roles)->get();
    }

    /**
     * Check permission
     */
    public function hasPermissionTo($permission)
    {
        return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

    /**
     * Check role
     */
    public function hasRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('name', $role)) {
                return true;
            }

            return false;
        }
    }

    /**
     * Assign roles
     */
    public function assignRoleTo(...$roles)
    {
        $roles = $this->getAllRoles(array_flatten($roles));

        if ($roles === null) {
            return $this;
        }

        $this->roles()->saveMany($roles);

        return $this;
    }

    /**
     * Remove role
     */
    public function removeRole($roles)
    {
        $roles = $this->getAllRoles(array_flatten($roles));

        $this->roles()->detach($roles);

        return $this;
    }

    /**
     * Sync role
     */
    public function syncRole(...$roles)
    {
        $this->roles()->detach();

        return $this->assignRoleTo($roles);
    }

    /**
     * Give permission
     */
    public function givePermissionTo(...$permissions)
    {
        $permissions = $this->getAllPermissions(array_flatten($permissions));

        if ($permissions === null) {
            return $this;
        }

        $this->permissions()->saveMany($permissions);

        return $this;
    }

    /**
     * Revoke permission
     */
    public function revokePermissions(...$permissions)
    {
        $permissions = $this->getAllPermissions(array_flatten($permissions));

        $this->permissions()->detach($permissions);

        return $this;
    }

    /**
     * Update permission
     */
    public function updatePermissions(...$permissions)
    {
        $this->permissions()->detach();

        return $this->givePermissionTo($permissions);
    }

    /**
     * Create relation eloquent
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
