<?php $this->load->view($this->config->item('theme').'header'); ?>


<div class="container">
    <h1>Instructions to post a gig</h1>
    
<ul>
    <li> Company information:
        <ul>
            <li>Fill out as much information as possible in the Company Information section.           
            </li>
            <li>All fields are mandatory with the exception of Company Address and Company Website.</li>
        
        </ul>

    
    </li>
    <li>Company Gig Contact:
        <ul>
            <li>The Company Gig Contact is the person who will be receiving the inquiries regarding the open gig.</li>
            <li>All fields are mandatory except for the phone field, which can be left blank if preferred.</li>
        
        
        </ul>
    </li>
    
      <li>Gig Information:
        <ul>
            <li>Employment Type Options:
                <ul>
                    <li>Contract: A long-term position with a set begin and end date. </li>
                    <li>Intern: A position for a student or trainee, sometimes without pay, in order to gain work experience.</li>
                    <li>Temporary: A short-term position, typically less than 3 months in length.</li>
                    <li>Permanent: A position of indefinite length</li>
                
                
                </ul>
                
            </li>
            <li>Pay Rate: Specify if the rate is hourly, per project, or annually, etc. </li>
            <li>Close Date: The date on which the gig posting will be removed from the list.</li>
            <li>Description: List as much information on the general duties and tasks the person filling this position would be performing.</li>
            <li>Qualifications: List necessary skills sets, education and work experience required.</li>
            <li>Special Instructions: Any additional information that was not listed in the Qualifications or Descriptions section.  Additionally include any instructions on requirements for submitting an application, such as cover letter or links to GitHub, portfolios, etc. </li>
            <li>All fields are required except for Pay Rate and Close Date</li>
           
        </ul>
    </li>
    <li>
    When all information is completed, click the ADD button on the bottom of the page.
    </li>
    
    </ul>
 
    
</div>

<?php $this->load->view($this->config->item('theme').'footer'); ?>