<?php
namespace Drupal\assess\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\webform\Entity\Webform;
use Drupal\webform\Entity\WebformSubmission;
use Drupal\webform\WebformSubmissionForm;





class AssessController extends ControllerBase {
    public function content($category,$id_param) {
        
        $webform_submission = WebformSubmission::load($id_param);
        $data = $webform_submission->getData();

        $alldata []= $data;
        $current_path = \Drupal::service('path.current')->getPath();
        // print_r($data);die;
        
        if($category == "productivity-and-collaboration"){
            
             
            return [
                '#theme' => 'production_review',
                '#prod_assess' => $data,
              ];
        }else if($category == "security-and-compliance"){
            return [
                '#theme' => 'security_review',
                '#sec_assess' => $data,
              ];
        }else if($category == "mobility"){
            return [
                '#theme' => 'mobility_review',
                '#mob_assess' => $data,
              ];
        }else if($category == "analytics-and-intelligence"){
            return [
                '#theme' => 'analytics_review',
                '#ana_assess' => $data,
              ];
        }else if($category == "flexibility-efficiency-and-sustainability"){
            return [
                '#theme' => 'flexibility_review',
                '#flex_assess' => $data,
              ];
        }

    }
}