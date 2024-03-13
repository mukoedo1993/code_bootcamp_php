#include<iostream>
#include<array>
int main(){
    std::array<int, 20>;
    std::array<int , 6>hehe = {1,2,3,4,5};
    for(int i : hehe){
        std::cout << i <<"\n";
    }
}