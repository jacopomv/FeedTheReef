#include <stdio.h>
#include <stdlib.h>
#include <thread>

using namespace std;

void snap()
{
    system("ffmpeg -y -f video4linux2 -i /dev/video0 -vframes 1 ../img-fish/fish.jpeg");
}

int main()
{
  thread t1(snap);
  return 0;
  }