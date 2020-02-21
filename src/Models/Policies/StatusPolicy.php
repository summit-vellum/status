<?php

namespace Quill\Status\Models\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Quill\Status\Models\Status;

class StatusPolicy
{

    use HandlesAuthorization;

    protected $module = 'status';

    /**
     * Determine if the given resource can be viewed by the user.
     *
     * @param  \App\User  $user
     * @param  \Quill\Status\Models\Status  $status
     * @return bool
     */
    public function view(User $user, Status $status)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('view');
    }

    /**
     * Determine if the given resource can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \Quill\Status\Models\Status  $status
     * @return bool
     */
    public function update(User $user, Status $status)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('update');
    }

    /**
     * Determine if the user can create a new resource.
     *
     * @param  \App\User  $user
     * @param  \Quill\Status\Models\Status  $status
     * @return bool
     */
    public function create(User $user)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('create');
    }

    /**
     * Determine if the given resource can be deleted by the user.
     *
     * @param  \App\User                $user
     * @param  \Quill\Status\Models\Status  $status
     * @return bool
     */
    public function delete(User $user, Status $status)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('delete');
    }

}
