<?php namespace Albrightlabs\AppReadMe\Controllers;

use Flash;
use Backend;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use Albrightlabs\AppReadMe\Models\ReadMe;
use System\Classes\SettingsManager;
/**
 * Documents Backend Controller
 */
class Documents extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Albrightlabs.AppReadMe', 'appreadme');
    }

    /**
     * Provides delete support from preview context
     */
    public function preview_onDelete()
    {
        $data = post();
        $readme = ReadMe::find($data['id']);
        $readme->delete();

        Flash::success('ReadMe deleted');
        return Redirect::to(Backend::url('albrightlabs/appreadme/documents'));
    }
}
