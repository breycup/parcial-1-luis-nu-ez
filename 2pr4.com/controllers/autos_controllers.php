<?php
    require_once("models/autos_model.php");

    class autos_controller{

        public static function mostrar(){
            $autos[] = new autos_model(1, "HYUNDAY", "HYUNDAY i10", "20.75", "5", "130.50", "imagenes/1.jpg");
            $autos[] = new autos_model(2,"SUZUKI","SUZUKI SWIFT","64.56","2","129.12","imagenes/2.jpg");
            $autos[] = new autos_model(3,"TOYOTA","TOYOTA COROLLA","70.67","9","636.03","imagenes/3.jpg");
            $autos[] = new autos_model(4,"BMW","BMW SERIE 2","120.90","7","846.30","imagenes/4.jpg");
            $autos[] = new autos_model(5,"HONDA","HONDA CR-V","140.67","8","1125.36","imagenes/5.jpg");
            return $autos;
        }

    }
?>