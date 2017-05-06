<!-- online admission section -->
<section class="online-admission section-padding box" style="background: #fff">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="addmission-inner">
					<h1 class="text-center">Online Admission Form</h1>
					<p><strong>Instruction:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae doloribus libero natus, doloremque? In, nemo quasi voluptatibus ducimus asperiores dicta, deserunt voluptatum architecto, vitae numquam impedit ratione sint ipsa pariatur fugit corrupti reprehenderit quo quibusdam non. Laborum eos ullam molestiae ratione similique ipsa sit aperiam consequuntur impedit unde. Deserunt, numquam</p>

					<p style="color: red">* Marks Require, Fill This Field Must.</p>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
						<!-- student registration form -->
							<form action="" method="post" enctype="multipart/form-data">
							<h2 class="text-center">Personal Information</h2>
								<div class="from-group">
									<label for="sub">Application For Admission in <span style="color: red"> *</span></label>
									<select class="form-control" name="sub" id="sub">
										  <option value="" selected>Select Subject</option>
										  <option value="CSE">CSE</option>
										  <option value="EEE">EEE</option>
										  <option value="BBA">BBA</option>
										  <option value="Math">Math</option>
										  <option value="SS">SS</option>
										</select>
								</div>
								<div class="from-group">
									<label for="name">Name<span style="color: red"> *</span></label>
									<input type="text" name="std_name" id="name" class="form-control"/>
								</div>
									
								<div class="form-group">
									<label for="fname">Father's Name <span style="color: red"> *</span></label>
									<input type="text" name="f_name" id="fname" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="mname">Mother's Name <span style="color: red"> *</span></label>
									<input type="text" name="m_name" id="mname" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="birthdate">Date of Birth <span style="color: red"> *</span></label>
									<input type="date" name="birthdate" id="birthdate" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="maddress">Mailing Address <span style="color: red"> *</span></label>
									<textarea name="address" id="address" class="form-control" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label for="phone">Phone No <span style="color: red"> *</span></label>
									<input type="text" maxlength="14" name="phone" id="phone" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="picture">Picture <span style="color: red"> *</span></label>
									<input type="file"  name="picture" id="picture" class="form-control"/>
								</div>
								<!-- academics -->
								<h2 class="text-center">Academic records</h2>
								<div class="from-group">
									<label for="ssc">Name of Exam <span style="color: red"> *</span></label>
									<select class="form-control" id="ssc" name="ssc">
									  <option value="" selected>Select Name of Exam</option>
									  <option value="Dakhil">Dakhil</option>
									  <option value="SSC">SSC</option>
									  <option value="Vocational">Vocational</option>
									</select>
								</div>
								<div class="form-group">
									<label for="std_group">Group/Subject <span style="color: red"> *</span></label>
									<select class="form-control" name="std_group" id="std_group" >
									  <option value="" selected>Select Group</option>
									  <option value="Science">Science</option>
									  <option value="Humanities">Humanities</option>
									  <option value="Business Studies">Business Studies</option>
									</select>
								</div>
								<div class="form-group">
									<label for="board">Board/University <span style="color: red"> *</span></label>
									<select class="form-control" name="board" id="board" >
									  <option value="" selected>Select Board</option>
									  <option value="Dhaka">Dhaka</option>
									  <option value="Barisal">Barisal</option>
									  <option value="Chittagong">Chittagong</option>
									  <option value="Comilla">Comilla</option>
									  <option value="Jessore">Jessore</option>
									  <option value="Rajshahi">Rajshahi</option>
									  <option value="Sylhet">Sylhet</option>
									  <option value="Dinajpur">Dinajpur</option>
									  <option value="Madrasah Board">Madrasah Board</option>
									  <option value="Technical Board">Technical Board</option>
									</select>
								</div>
								<div class="from-group">
									<label for="sub">Year of Passing <span style="color: red"> *</span></label>
									<select class="form-control" id="sub">
									  <option value="" selected>Select Passing Year</option>
									  <option value="2015">2015</option>
									  <option value="2016">2016</option>
									  <option value="2007">2017</option>
									</select>
								</div>
								<div class="form-group">
									<label for="roll">Roll of Exam <span style="color: red"> *</span></label>
									<input type="text" name="roll" id="roll" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="class">Class /Division/Grade <span style="color: red"> *</span></label>
									<select class="form-control" name="class" id="class" >
									  <option value="" selected>Select Class/Division/Grade</option>
									  <option value="A+">A+</option>
									  <option value="A">A</option>
									  <option value="A-">A-</option>
									  <option value="B">B</option>
									  <option value="C">C</option>
									  <option value="D">D</option>
									</select>
								</div>
								<div class="form-group">
									<label for="point">GPA<span style="color: red"> *</span></label>
									<input type="text" class="form-control" name="point" id="point" placeholder="Minimum GPA = 2.5" />
								</div>
								<!-- bangk info -->
								<h2 class="text-center">Bank Information</h2>
								<p>AB Bank Limited</p>
								<p>Account No. 4022-792721-000</p>
								<p>Shewrapara, Branch.</p>
									
								<div class="form-group">
									<label for="money">Amount <span style="color: red"> *</span></label>
									<input type="text" name="money" id="money" class="form-control"/>
								</div>
									
								<div class="form-group">
									<label for="slipNo">Deposit Slip No <span style="color: red"> *</span></label>
									<input type="text" name="slipNo" id="slipNo" class="form-control"/>
								</div>
								<div class="form-group">
									<label for="paymentDate">Date of Payment <span style="color: red"> *</span></label>
									<input type="date" name="paymentDate" id="paymentDate" class="form-control"/>
								</div>
							</form> <!-- end of the student regi form -->
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- /online admission section