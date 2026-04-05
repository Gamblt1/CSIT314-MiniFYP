document.addEventListener('DOMContentLoaded', function() 
{
    
    function showAlert(message) 
    {
        alert(message);
    }
    
    var allButtons = document.querySelectorAll('button');
    
    for (var i = 0; i < allButtons.length; i++) 
	{
        var btn = allButtons[i];
        
        if (btn.getAttribute('onclick') && btn.getAttribute('onclick').indexOf('window.location') !== -1) {
            continue;
        }
        
        btn.addEventListener('click', function(e) 
{
            e.preventDefault();
            var text = this.innerText.trim();
            
            switch(text) 
	   {
                case 'Donate Now':
                    showAlert('Donation simulation: Thank you for your support! (No actual transaction)');
                    break;
                case 'Support as Donor':
                    showAlert('You chose to support this donee. A fundraiser will be notified.');
                    break;
                case 'Connect with Fundraiser':
                    showAlert('Connection request sent to potential fundraisers.');
                    break;
		case 'Start a Fundraiser':
    		// do nothing OR redirect

    		break;	
                default:
            }
        });
    }
});