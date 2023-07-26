document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);


let myForm = document.getElementById('myForm');


myForm.addEventListener('submit' , function(e){
    let myInput = document.getElementById('mail');
    let myerror = document.getElementById('error');
    myerror.innerHTML ="le champs est requis";
    myerror.style.color = 'red';
})