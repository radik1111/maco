<?php
function redirect(){
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = @$_SERVER['REMOTE_ADDR'];
        $result  = array('country'=>'', 'city'=>'');
 
        if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
        elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
        else $ip = $remote;
 
        $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
        if($ip_data && $ip_data->geoplugin_countryName != null)
        {
            $result = $ip_data->geoplugin_countryCode;
        }
 
        //Получаем IP пользователя
        $ip =  $_SERVER['REMOTE_ADDR'];
        if(!current_user_can('manage_options')) {
            //Ну и сам код редиректа
            if($result == "RU" || $result == "AZ" || $result == "AM" || $result == "KZ" || $result == "KG" || $result == "MD" || $result == "TJ" || $result == "UZ") {
                
                if (isset($_GET['eng'])){ ?>
                    <style>
                        #eng {
                            display: none;
                        }
                    </style>
                    <script src='/wp-content/themes/bulldog/js/redirect.js'></script>
                <?php
                } else { ?>
                    <style>
                        #eng {
                            display: block;
                        }
                    </style>
                    <script>
                        if (window.location.pathname.slice(0, 4) == "/ru/"){
                        } else if (window.location.pathname.slice(0) !== "/ru/"){
                          window.location.href = /ru/;
                        }
                    </script>
                    <?php
                }
            } else { 
                if (isset($_GET['eng'])){ ?>
                    <style>
                        #eng {
                            display: none;
                        }
                    </style>
                    <script src='/wp-content/themes/bulldog/js/redirect.js'></script>
                <?php
                }
            ?>
                    <script>
                        if (window.location.search == '?eng=1'){
                        } else if (window.location.search !== '?eng=1'){
                          window.location.href = '/?eng=1';
                        }
                    </script>
            <?php
            }
        }
    }
add_action( 'wpredirect', 'redirect' );
            ?>