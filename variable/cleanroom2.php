    <?php
    $possible_states = array ("health hazard","filthy","dirty","clean","immaculate");

    // When testing, change the index value to navigate to the possible array values
    $room_filthiness = $possible_states[0]; 
    
    switch ($room_filthiness) {
        case "health hazard":
            echo "It's time to clean your room, i'm sure i've seen some rats in there" ;
            break;
        
        case "filthy" : 
            echo "Clean your room, there is so much dust i can barely see the ground";
            break;
        
        case "dirty" : 
            echo "clean your room,it's dirty ";
            break;

        case "clean" : 
            echo "your room is clean, nothing to do here";
            break;
        
        case "immaculate" : 
            echo "So clean we could eat on the ground";
            break;
        default:
            echo "unable to determinate your room's state";
            break;
    }
    ?>