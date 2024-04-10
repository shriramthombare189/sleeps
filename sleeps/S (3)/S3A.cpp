#include <iostream>
using namespace std;
void interchange(int &a, int &b) {
    int temp = a;
    a = b;
    b = temp;
}
int main() {
    int num1 = 5, num2 = 10;
    cout << "Original values: " <<endl;
    cout << "num1: " << num1 << " num2: " << num2 <<"\n";
    interchange(num1, num2);
    cout << "\nValues after interchanging: " <<"\n";
    cout << "num1: " << num1 << " num2: " << num2;
    return 0;
}
