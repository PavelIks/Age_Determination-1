<?php
    if(isset($_POST['year']))
    {
        echo
            '
                <table style="background-color: green; margin-top: 20%; margin-left: 50%; color: white">
                    <tr>
                        <td>
                            <h1>
                                <div>
                                    Вам '.(2020-$_POST['year']).' лет! 
                                </div>
                            </h1>
                        </td>
                    </tr>
                </table>
            ';
    }
    else
        {
            echo '<div style="background-color: red;">ERROR!</div>';
        }
?>