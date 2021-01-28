<?php

namespace App\View\Components\Admin\Auth;

use Illuminate\View\Component;

class loggedUserHasPermissions extends Component
{

    public $loggedUser;
    public $showOnlyIcons= false;
    public $hasAdminRole= false;

    public function __construct( $loggedUser, bool $showOnlyIcons= false )
    {
        \Log::info( '-1 $showOnlyIcons ::' . print_r( $showOnlyIcons, true  ) );
        echo '<pre>$showOnlyIcons::'.print_r($showOnlyIcons,true).'</pre>';
        $this->loggedUser = $loggedUser;
        $this->showOnlyIcons = $showOnlyIcons;
        $this->hasAdminRole = false;
    }

    public function render()
    {
        \Log::info( '-1 $showOnlyIcons ::' . print_r( $this->showOnlyIcons, true  ) );
        return view('components.admin.auth.logged-user-has-permissions');
    }

    public function isSelected($option)
    {
        return 'isSelected';
    }
}
