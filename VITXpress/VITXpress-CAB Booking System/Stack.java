import java.util.*;
public class Stack {
    static boolean check(int input[], int output[], int n){
        Stack<Integer> s = new Stack<Integer>();
        int j=0;
        for(int i=0; i<n; i++){
            s.push(input[i]);
            while(!s.isEmpty() && s.peek() == output[j]){
                s.pop;
                j++;
            }
        }
        if(s.isEmpty())
            return true;
        return false;
    }
    public static void main(String[] args){
        Scanner s = new Scanner(System.in);
        int n = s.nextInt();
        int input[] = new int[n];
        int output[] = new int[n];
        for(int i=0; i<n; i++){
            input[i]=s.nextInt();
        }
        for(int i=0; i<n; i++){
            output[i]=s.nextInt();
        }
        if(check(input, output, n)){
            System.out.println("YES");
        }
        else{
            System.out.println("NO");
        }
    }
}
