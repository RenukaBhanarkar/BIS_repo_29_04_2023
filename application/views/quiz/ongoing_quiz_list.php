    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">On Going Quiz</h1>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">On Going Quiz</li>
                </ol>
              </nav>
           
        </div>
       
       
        <!-- Content Row -->
        
        <div class="row">
            <div class="col-12 mt-3">
            <div class="card border-top card-body">
                <table id="example" class="hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Quiz ID</th>
                            <th>Quiz Title</th>
                            <th>Quiz Start Date</th>
                            <th>Quiz End Date</th>
                            <th>Total Questions in Quiz</th>
                            <th>Total Questions in QB</th>
                            <th>Total Marks</th>
                           <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>  
                               <?php if(!empty($allquize)){
                            $i=1;
                            foreach($allquize as $quiz)
                            {?>
                                <tr>
                                 <td><?= $i++?></td>
                                 <td><?= $quiz['quiz_id']?></td>
                                 <td><?= $quiz['title']?></td>
                                 <td><?= date("d-m-Y", strtotime($quiz['start_date']));?></td>
                                 <td><?= date("d-m-Y", strtotime($quiz['end_date']));?></td>
                                 <td><?= $quiz['total_question']?></td>
                                 <td><?= $quiz['no_of_ques']?></td>
                             <td><?= $quiz['total_mark']?></td>  
                             <td class="d-flex border-bottom-0">
                                    <button onClick="location.href='<?php echo base_url();?>Quiz/quiz_view/<?= $quiz['id']?>'" class="btn btn-primary btn-sm mr-2">View</button>
                                    <button onClick="location.href='closed_quiz_submission/<?= $quiz['id']?>'" class="btn btn-warning btn-sm mr-2">View submission</i></button>
                                 </td>
                                   
                             
                            <?php } }?>
                        
                                 
                                  
                            
                                    <!-- Modal -->
                        </tr>        
                           
                    </tbody>
                </table>
            </div>    
          </div>
        </div>
       </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

