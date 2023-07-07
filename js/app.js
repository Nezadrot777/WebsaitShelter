// проверка формы на стороне клиента
function validateForm()
{
	var form_object = document.forms.animalsform;
	var number = document.forms.animalsform.elements.number.value;

	if(form_object.elements.name.value == '')
	{
    	alert('Вы должны ввести свое имя!');
	    return false;
	}
    if (form_object.elements.mail.value == '') 
    {
        alert('Вы должны ввести свой e-mail!');
        return false; 
    }
    if(form_object.elements.number.value == '')
    {
        alert('Вы должны ввести свой номер!');
        return false;
    }
    if(form_object.elements.description.value == '')
    {
        alert('Укажите кого хотите забрать!');
        return false;
    }
}