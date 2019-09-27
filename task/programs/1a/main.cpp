#include <iostream>
#include <string>
#include <cstdlib>
using namespace std;

void printPyramid() {
    for(unsigned int i = 1; i <= 5; i++) {
        cout << string(5-i, ' ') << string(i, '#') << endl;
    }
}

int main()
{
    printPyramid();

    cin.get();
    return 0;
}
