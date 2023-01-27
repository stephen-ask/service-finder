<?php 
  $html = '';
if(!empty($posts)):
    foreach ($posts as $post): 
        $start_date = get_post_meta($post->ID, 'etn_start_date', true);
        $start_time = get_post_meta($post->ID, 'etn_start_time', true);
        $total_tickets = get_post_meta($post->ID, 'etn_total_avaiilable_tickets', true);
        
        $image = get_the_post_thumbnail_url($post->ID, 'full');

        $html .= '<div class="col-lg-6 col-md-6">';
            $html .= '<div class="meetup-card">';
                
                $html .= '<div class="meetup-img" style="background-image: url('.$image.')">';
                    $html .= '<a href="#"><i class="fas fa-share-alt shared-icon"></i></a>';
                $html .= '</div>';

                $html .= '<div class="card-content">';

                    $html .= '<h4>';
                        $html .= $post->post_title;
                    $html .= '</h4>';
                    $html .= '<p>';
                        $html .= 'Travel';
                    $html .= '</p>';

                    $html .= '<div class="meet-wrap">';
                        $html .= '<div class="meet-up-description">';
                            $html .= '<i class="fa fa-calendar"></i> <div class="date">'. $start_date;
                        $html .= '</div>';
                        $html .= '<div class="right">';
                            $html .= '<i class="fa fa-user"></i><div class="bookings">'.$total_tickets.' Booking</div>  ';
                        $html .= '</div>';
                    $html .= '</div>';

                    $html .= '</div>';
                    $html .= '<a href="#" class="meetup-remainder">Set Remainder</a>';
                $html .= '</div>';
            $html .= '</div>';
        $html .= '</div>';
        
    endforeach;

else: 
    $html .= '<h3>No Records Found</h3>';
endif;

echo $html;

