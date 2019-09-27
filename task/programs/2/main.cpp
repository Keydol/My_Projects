#include <iostream>
#include <string>
#include <cstdlib>
using namespace std;

void printPyramid() {
    unsigned int heightPyramid, rowChanged;
    cout << "Height of pyramid: ";
    cin >> heightPyramid;
    cout << "Line number with other characters: ";
    cin >> rowChanged;
    for(unsigned int i = 1; i <= heightPyramid; i++) {
        cout << string(heightPyramid-i, ' ') << (i == rowChanged? string(i, '@') : string(i, '#')) << endl;
    }
}

int main()
{
    printPyramid();

    cin.get();
    return 0;
}
