import java.util.*;
public class Main{
    static void Maximum(int arr[], int n, int k){
        int j, max;
        for(int i=0; i<=n-k; i++){
            max=arr[i];
            for(int j=1; j<k; j++){
                if(arr[i+j]>max){
                    max=arr[i+j];
                }
            }
            System.out.print(max+" ");
        }
    }
    public static void main(String[] args){
        Scanner s = new Scanner(System.in);
        int n = s.nextInt();
        int arr[] = new int[n];
        for(int i=0; i<n; i++){
            arr[i]=s.nextInt();
        }
        int k = s.nextInt();
        Maximum(arr,n,k);
        s.close();
    }
}