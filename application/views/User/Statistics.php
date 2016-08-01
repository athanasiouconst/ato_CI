
<?php $this->load->view('Include/include_content'); ?>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div><br><br><br><br></div>
                    <div class="alert alert-info" style="font-size: 18px;">
                        <i><?= $username ?></i>, <strong>Αναζητήστε στατιστικά στοιχεία ένα από τα παρακάτω πεδία: </strong> 
                    </div>

                    <!--<?php echo validation_errors(); ?>-->
                    <?php if (isset($error)) : ?>
                        <?= $error ?>
                    <?php endif; ?>
                    <div>
                        <table class="table table-hover table-striped">

                            <tr class="insertform">
                                <td colspan="2">
                                    <!--  FORM -->
                                    <?php if (isset($error)) : ?>
                                        <div class="alert alert-danger" style="width: 100%; font-size: 18px; padding-left: 20%;  ">
                                            <strong><?= $error ?></strong>
                                            <strong><?php echo validation_errors(); ?></strong>
                                        </div>                    
                                    <?php endif; ?>
                                </td>
                            </tr><?php echo form_open('User/SearchStatistics') ?>
                            <!--
                                                        <tr class="insertform">
                                                            <td colspan="2">                                       
                                                                <p><span title="Συμπληρώστε τη περιοχή του προς Αναζήτηση Περιστατικού ">
                                                                        <input type="text" name="area" id="area" placeholder="Συμπληρώστε τη περιοχή του προς Αναζήτηση Περιστατικού " value="<?php echo set_value('area'); ?>"  />
                                                                    </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="insertform">
                                                            <td colspan="2">                                       
                                                                <p><span title="Συμπληρώστε τη περιγραφή του προς Αναζήτηση Περιστατικού ">
                                                                        <input type="text" name="description" id="description" placeholder="Συμπληρώστε τη περιγραφή του προς Αναζήτηση Περιστατικού " value="<?php echo set_value('description'); ?>"  />
                                                                    </span>
                                                            </td>
                                                        </tr>
                                                 
                                                        <tr class="insertform">
                                                            <td colspan="2">                                       
                                                                <p><span title="Συμπληρώστε Χρήσιμες Λέξεις Ενεργειών Αναγνώρισης προς Αναζήτηση Περιστατικού ">
                                                                        <input type="text" name="anagnorisi" id="anagnorisi" placeholder="Συμπληρώστε Χρήσιμες Λέξεις Ενεργειών Αναγνώρισης προς Αναζήτηση Περιστατικού " value="<?php echo set_value('anagnorisi'); ?>"  />
                                                                    </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="insertform">
                                                            <td colspan="2">                                       
                                                                <p><span title="Συμπληρώστε Χρήσιμες Λέξεις Ενεργειών Εξουδετέρωσης προς Αναζήτηση Περιστατικού ">
                                                                        <input type="text" name="exoudeterosi" id="exoudeterosi" placeholder="Συμπληρώστε Χρήσιμες Λέξεις Ενεργειών Εξουδετέρωσης προς Αναζήτηση Περιστατικού " value="<?php echo set_value('exoudeterosi'); ?>"  />
                                                                    </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="insertform">
                                                            <td colspan="2">                                       
                                                                <p><span title="Συμπληρώστε Χρήσιμες Λέξεις Ενεργειών Καταστροφής προς Αναζήτηση Περιστατικού ">
                                                                        <input type="text" name="katastrofi" id="katastrofi" placeholder="Συμπληρώστε Χρήσιμες Λέξεις Ενεργειών Καταστροφής προς Αναζήτηση Περιστατικού " value="<?php echo set_value('katastrofi'); ?>"  />
                                                                    </span>
                                                            </td>
                                                        </tr>
                            -->
                            <tr class="insertform">
                                <td>                     
                                    <p><span title="Συμπληρώστε ημερομηνία έναρξης περιστατικού"></span>
                                    <div class="controls input-append date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <input style="width:80%;" size="16" type="text" name="date_before" id="date_before" value="<?php echo set_value('date_before'); ?>" placeholder="Ημερομηνία Έναρξης Περιστατικού" >
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input2" value="<?php echo set_value('date_before'); ?>" /><br/>
                                </td>
                                <td>   
                                    <p><span title="Συμπληρώστε ημερομηνία λήξης περιστατικού"></span>
                                    <div class="controls input-append date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <input style="width:80%;" size="16" type="text" name="date_after" id="date_after" value="<?php echo set_value('date_after'); ?>" placeholder="Ημερομηνία Λήξης Περιστατικού" >
                                        <span class="add-on"><i class="icon-remove"></i></span>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                    <input type="hidden" id="dtp_input2" value="<?php echo set_value('date_after'); ?>" /><br/>
                                </td>
                            </tr>
                        </table>
                        <div class="btn btn-group-lg" style="padding-left: 40%;">
                            <p><?php echo form_submit('submit', 'ΑΝΑΖΗΤΗΣΗ'); ?></p>
                            <?php echo form_close() ?>
                        </div>   
                    </div>
                    <div style="float: left; padding-top: 10px;">
                        <a href="javascript:history.go(-1)" class="btn btn-large btn-info">ΕΠΙΣΤΡΟΦΗ</a>
                        <br>
                    </div>
                </div>
            </div>
            <!-- end divider -->
        </div>
</section>

<?php $this->load->view('Include/include_footer'); ?>

