<?php

/* 
 Template Name: Batch
 */

get_header(); ?>


<?php 

$current_user = wp_get_current_user();
$ga = $current_user->user_login;
$rosle = $current_user->roles[0];
$skill_id = $_POST['skill_id'];
$player_ids = json_decode(str_replace("\\", "", $_POST['ids']));
$type = $_POST['skill_type'];
$video_url = $_POST['video_url'];
$skill_name = $_POST['skill_name'];
$playernote = $_POST['skill_note'];
$no_comment = array('r' => 'No comment found');
$date = date('d/m/Y');
if($playernote){
      for($i = 0; $i < count($player_ids); $i++){
	   if($type == 'skillenhancement'){
		$playerworkout = get_modified_array(get_user_meta($player_ids[i], 'skill-enhancement-player-workout-' . $skill_id));
                if(!empty($playerworkout)){
                    $playerworkout[3] = $playernote;
                    $result = update_user_meta($player_ids[i],'skill-enhancement-player-workout-' . $skill_id,$playerworkout);
                }
                else{
                    $result = update_user_meta($player_ids[i], 'skill-enhancement-player-workout-' . $skill_id, array($skill_id, $skill_name, $date, $playernote, $video_url,'skillenhancement'));
                }
            }
            else{
                $playerworkout = get_modified_array(get_user_meta($player_ids[i], 'methodology-player-workout-' . $skill_id));
                if(!empty($playerworkout)){
                    $playerworkout[3] = $playernote;
                    $result = update_user_meta($player_ids[i],'methodology-player-workout-' . $skill_id,$playerworkout);
                }
                else{
                    $result = update_user_meta($player_ids[i], 'methodology-player-workout-' . $skill_id, array($skill_id, $skill_name, $date, $playernote, $video_url,'methodology'));
                }
	    }
      }
}
if($result){
    echo $result;
}
else{
    echo 'false';
}
?>