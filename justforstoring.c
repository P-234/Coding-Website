<script>
                            
                         <?php
                                // exec("sudo chmod 777 *.txt");
                                
                                //  exec("rm -f *.txt");
                                ?>    




                            function submitcode1() {
                                callSubmit();
                                
                                alert('<?php if ($result) echo "congratulation!!!! your answer is correct.";
                                        else  echo "Sorry!! your ans is not correct."; ?>');

                            }
                        </script>