    <?php
    
    switch ($_POST['currency']) {
        case "CAD":
            if($_POST['currency2'] = 'USD') :
                $_POST['output'] = ($_POST['amount']*.750);
            echo "Amount: ".$_POST["output"];
            elseif($_POST['currency2'] = 'CNY') :
                $_POST['output'] = ($_POST['amount']*5.014);
                echo "Amount: ".$_POST["output"];
            elseif ($_POST['currency2'] = 'GBP') :
                $_POST['output'] = ($_POST['amount']*.579);
                echo "Amount: ".$_POST["output"];
            elseif ($_POST['currency2'] = 'EUR') :
                $_POST['output'] = ($_POST['amount']*.644);
                echo "Amount: ".$_POST["output"];
            endif;
            break;
        case "CNY":
            if($_POST['currency2'] = 'USD') :
                $_POST['output'] = ($_POST['amount']*.149);
                echo "Amount: ".$_POST["output"];
            elseif($_POST['currency2'] = 'CAD') :
                $_POST['output'] = ($_POST['amount']*.199);
                echo "Amount: ".$_POST["output"];

            elseif ($_POST['currency2'] = 'GBP') :
                $_POST['output'] = ($_POST['amount']*.115);
                echo "Amount: ".$_POST["output"];

            elseif ($_POST['currency2'] = 'EUR') :
                $_POST['output'] = ($_POST['amount']*.128);
                echo "Amount: ".$_POST["output"];

            endif;
            break;
        case "USD":
            if($_POST['currency2'] = 'CAD') :
                $_POST['output'] = ($_POST['amount']*1.333);
                echo "Amount: ".$_POST["output"];
            elseif($_POST['currency2'] = 'CNY') :
                $_POST['output'] = ($_POST['amount']*6.686);
                echo "Amount: ".$_POST["output"];
            elseif ($_POST['currency2'] = 'GBP') :
                $_POST['output'] = ($_POST['amount']*.773);
                echo "Amount: ".$_POST["output"];
            elseif ($_POST['currency2'] = 'EUR') :
                $_POST['output'] = ($_POST['amount']*.858);
                echo "Amount: ".$_POST["output"];
            endif;
            break;
        case "GBP":
            if($_POST['currency2'] = 'USD') :
                $_POST['output'] = ($_POST['amount']*1.293);
                echo "Amount: ".$_POST["output"];
            elseif($_POST['currency2'] = 'CNY') :
                $_POST['output'] = ($_POST['amount']*8.649);
                echo "Amount: ".$_POST["output"];
            elseif ($_POST['currency2'] = 'CAD') :
                $_POST['output'] = ($_POST['amount']*1.724);
                echo "Amount: ".$_POST["output"];
            elseif ($_POST['currency2'] = 'EUR') :
                $_POST['output'] = ($_POST['amount']*1.110);
                echo "Amount: ".$_POST["output"];
            endif;        break;
        case "EUR":
            if($_POST['currency2'] = 'USD') :
                $_POST['output'] = ($_POST['amount']*1.164);
                echo "Amount: ".$_POST["output"];
            elseif($_POST['currency2'] = 'CNY') :
                $_POST['output'] = ($_POST['amount']*7.784);
                echo "Amount: ".$_POST["output"];
            elseif ($_POST['currency2'] = 'GBP') :
                $_POST['output'] = ($_POST['amount']*.900);
                echo "Amount: ".$_POST["output"];
            elseif ($_POST['currency2'] = 'CAD') :
                $_POST['output'] = ($_POST['amount']*1.552);
                echo "Amount: ".$_POST["output"];
            endif;
            break;
    }
