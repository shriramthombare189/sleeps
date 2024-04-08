// #include<iostream>
// using namespace std;
// class pre{
//     private:
//     int i;
//     int o;
//     public:
//     pre(int a,int b){
//         i = a;
//         o = b;
//     }
//     pre operator+(pre n){
//          ans.i = i + n.i;
//          ans.o = o + n.o;
//         return ans;
//     }
// };


// C++ Program to Demonstrate
// Operator Overloading
#include <iostream>
using namespace std;
 
class Myfile {
private:
    int a, b;
 
public:
    Myfile(int r = 0, int i = 0)
    {
        a = r;
        b = i;
    }
   Myfile operator+(Myfile obj)
    {
        Myfile ans;
        ans.a = a + obj.a;
        ans.b = b + obj.b;
        return ans;
    }
    void print() { 
        cout << a <<'\n';
         cout<< b <<'\n'; 
        }
};
int main()
{
    Myfile F1(3, 4), F2(5, 8);
    Myfile F3 = F1 + F2;
    F3.print();
}