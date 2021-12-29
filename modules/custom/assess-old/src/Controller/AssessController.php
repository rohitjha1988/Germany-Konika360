<?php
namespace Drupal\assess\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\webform\entity\WebformSubmission;

class AssessController extends ControllerBase {
    public function content($id_param) {
//print_r($id_param);die();
        //$web_submission_id = 996;
        $alldata = [];
        $webform_submission = WebformSubmission::load($id_param);
        $data = $webform_submission->getData();
print_r($webform_submission);die('ji');


        $alldata []= $data;
       $current_path = \Drupal::service('path.current')->getPath();
        




        return [
            '#theme' => 'assess_template',
            '#var1' =>  $data,
        ];

    }
}