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
    int b;
 
public:
    Myfile(int i = 0)
    {
        b = i;
    }
   Myfile operator+(Myfile obj)
    {
        Myfile ans;
        ++ans.b;
        return ans;
    }
    void print() { 
         cout<< b <<'\n'; 
        }
};
int main()
{
    Myfile F1(3);
    F1.print();
}