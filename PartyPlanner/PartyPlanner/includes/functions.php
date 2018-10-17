<?php
    function time_test($d){
        date_default_timezone_set('America/New_York');
        if(substr($d['date'],0,4)>date("Y")){
            return true;
        } else if(substr($d['date'],0,4)<date("Y")){
            return false;
        } else {
            if(substr($d['date'],5,2)>date("m")){
                return true;
            } else if(substr($d['date'],5,2)<date("m")) {
                return false;
            } else {
                if(substr($d['date'],8,2)>date("d")){
                    return true;
                } else if(substr($d['date'],8,2)<date("d")){
                    return false;
                } else {
                    if(substr($d['time'],0,2)>date("H")){
                        return true;
                    } else if(substr($d['time'],0,2)<date("H")){
                        return false;
                    } else {
                        if(substr($d['time'],3,2)>date("i")){
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            }
        }
    }