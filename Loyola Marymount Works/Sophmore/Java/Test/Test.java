import java.util.*;

public class Test {

	public static void main(String[] args) {
		int[] numbers = new int[8];

		for (int i = 0; i < numbers.length; i++) {
			int randomNum = 1 + (int)(Math.random()*10000); 
			numbers[i] = randomNum;
		}
		System.out.println(Arrays.toString(numbers));

		for (int j = 1; j < numbers.length; j++) {
			int key = numbers[j];
			int i = j - 1;
			for (i = j - 1; (i >= 0) && (numbers[i] > key); i--) {
				numbers[i + 1] = numbers[ i ];
			}
			numbers[i + 1] = key;
		}
		System.out.println(Arrays.toString(numbers));
	}
}