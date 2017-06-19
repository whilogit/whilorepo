<?php
namespace App\Repositories\Frontend\Mail;
use App\Http\Controllers\Controller;

class Feedbackmail extends Controller
{
	public static function send($feedbackId,$emailId,$fullname)
	{
	
	
	   $message =  '	<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f98550" background="http://whilo.in/img/hero_gradient.jpg" style="height:450px; background-image: url("http://whilo.in/img/hero_gradient.jpg"); background-size: cover; -webkit-background-size: cover; -moz-background-size: cover -o-background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;">
	  <tr>
	   <td>

		   	<table width="600" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		   		<tbody>
		   			<tr>
		   				<td width="100%" height="40"></td>
		   			</tr>
		   			<tr>
		   				<td>
		   					<!--  Logo  -->
		   					<table border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		   						<tbody>
		   							<tr>
		   								<td>
		   									<a href="#"><img src="http://whilo.in/img/logo.png" alt="Holu" border="0" style="display: block;height: 46px;padding: 7%;background: white;border-radius: 7%;"/> </a>
		   								</td>
		   							</tr>
		   						</tbody>
		   					</table>

		   					<!--  navigation menu  -->
		   					<table border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		   						<tbody>
		   							<tr>
		   								<td height="8"></td>
		   							</tr>

		   							<tr>
		   								<td style="color: #fff; font-family: Raleway, arial; font-weight:600; font-size: 14px; letter-spacing:0.5px;">
	   										
	   										<a href="#" style="color: #fff; text-decoration:none;">Contact</a>
		   								</td>
		   							</tr>
		   						</tbody>
		   					</table>

		   				</td>
		   			</tr>
		   			<tr>
		   				<td height="169"></td>
		   			</tr>
		   			<tr>
		   				<td style="text-align:center; color: #fff; font-family: Raleway, arial; font-weight:600; font-size: 16px; text-transform:uppercase; letter-spacing:3px;">Find talented candidates though our social recruiting system based on their skills, interests and actions. Get verified profiles, candidate ratings from their current/ previous employer.</td>
		   			</tr>
		   			
		   		</tbody>
		   	</table>

	   </td>
	  </tr>
	 </table>


	 <!--  services  -->

	<!--  Services  -->
	<table width="600" align="center"  cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		<tbody>
		<tr>
												<td width="50" height="50">
													
												</td>
											</tr>
<tr>
												<td align="center">
													<img src="http://whilo.in/img/s1.png" alt="Service 1" border="0" style="display: block;"/>
												</td>
											</tr>
											<tr>
												<td width="20" height="20">
													
												</td>
											</tr>
			<tr>				<td style="color: #545454; font-family: Raleway, arial; font-weight:600; font-size: 16px; text-transform:uppercase;">
				As part of the process for hiring new employees, Whilo’s policy requires you to complete a
background check in order to work for corporate companies. You will not be charged any fee for this service.
This email will take you to whilo.in, where you have to verify Mr.Something.Please click on the below link to proceed.Thanks in advance. 
				</td>
			</tr>
			<tr>
												<td width="20" height="20">
													
												</td>
											</tr>
				<tr>
												<td width="20" height="20" style="color: #545454; font-family: Raleway, arial; font-weight:600; font-size: 16px;text:center;">
													<a href="http://whilo.in/feedback/'. $feedbackId .'" target="_blank">Click here to Verify Mr.'. $fullname . '</a>
												</td>
											</tr>							
			
		</tbody>
	</table>
	<!--  footer  -->
	<table width="100%" bgcolor="#f9823a" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
		<tbody>
			<tr>
				<td>
					<table width="600" align="center" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
						<tbody>
							<tr>
								<td width="100%" height="40px"></td>
							</tr>
							<tr>
								<td>
									<!--  footer logo  -->
									<table  align="left" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
										<tbody>
											<tr>
											
												<td width="20"></td>
												<td>
													<table cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
														<tr>
															<td width="100%" height="16"></td>
														</tr>
														<tr>
															<td style="color: #fff; font-family: Raleway; font-size: 12px;">© All rights reserved</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>

									<!--  footer social media  -->
									<table align="right" cellpadding="0" border="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
										<tbody>
											<tr>
												<td width="100%" height="8"></td>
											</tr>
											<tr>
												<td>
													<a href="#"><img src="http://whilo.in/img/facebook.png" alt="facebook" border="0"/></a>
													&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="#"><img src="http://whilo.in/img/twitter.png" alt="twitter" border="0"/></a>
													&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="#"><img src="http://whilo.in/img/google+.png" alt="google+" border="0"/></a>
													
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td width="100%" height="40px"></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>';
	
			
			$to = $emailId;
			$subject = 'Feedback';
			$from = 'whilo.in';
			 
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			 
			// Create email headers
			$headers .= 'From: '.$from."\r\n".
				'Reply-To: '.$from."\r\n" .
				'X-Mailer: PHP/' . phpversion();
			mail($to, $subject, $message, $headers);
	
		
	}
    
}