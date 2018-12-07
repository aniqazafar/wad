var Account_Detail= {

account_name :"Aniqa Zafar",
account_balance : 2000000,
account_currency : "PKRS",
IBAN : "PKN1234567890"

};

function display()
{
	document.getElementById("title").innerText= Account_Detail.account_name;
	document.getElementById("balance").innerText= Account_Detail.account_balance;
	document.getElementById("currency").innerText= Account_Detail.account_currency;
	document.getElementById("IBAN").innerText= Account_Detail.IBAN;

}

display();

function Deposit(enter)
{
var dep;
	if (enter.keycode == 13)
	{
		dep = document.getElementById("Deposit").value;
		if (!isNan(dep))
		{

		} 

	}

}


