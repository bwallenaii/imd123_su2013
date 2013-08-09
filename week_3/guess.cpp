#include <iostream>
#include <stdlib.h>
#include <time.h>
using namespace std;

int main()
{
	int randNum;
	int guess;
	srand(time(NULL));
	randNum = rand() % 10 + 1;
	cout << "Guess a number between 1 and 10\r\n";
	cin >> guess;

	if(guess == randNum)
	{
		cout << "Correct! You should be a computer!\r\n";
	}
	else if(guess < randNum)
	{
		cout << "Sorry, you guessed lower than " << randNum << "\r\n";
	}
	else
	{
		cout << "Sorry, you guessed higher than " << randNum << "\r\n";
	}
	return 0;
}
