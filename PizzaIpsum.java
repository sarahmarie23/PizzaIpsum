import java.util.*;
public class PizzaIpsum {
    public static void main(String[] args) {
        System.out.println("How many paragraphs would you like?");
        Scanner input = new Scanner(System.in);
        int paragraphCount = input.nextInt();
        Random rand = new Random();
        pageGenerator(paragraphCount);   
    }
        
    public static void sentenceGenerator () {
        String pizzaWords[] = new String[] {"pizza", "dough", "pepperoni", "pizza hut", "oven", "mozzarella", "cheese", "sauce", "pineapple", "mushrooms", "olives", "peppers"};
        Random rand = new Random();
        int sentenceLength = rand.nextInt(6)+1;
        
        String firstWord = pizzaWords[sentenceLength].substring(0, 1).toUpperCase() + pizzaWords[sentenceLength].substring(1);
        System.out.print(firstWord);
    
        for(int word = 0; word < sentenceLength; word++){
            System.out.print(" " + pizzaWords[word]);
        }
        System.out.print(". ");
    }
    
    public static void paragraphGenerator() {
        Random rand = new Random();
        for(int sentence = 0; sentence < rand.nextInt(10)+2; sentence++) {
            sentenceGenerator();
        }
    }
    
    public static void pageGenerator (int paragraphCount) {
        for(int paragraph = 0; paragraph < paragraphCount; paragraph++) {
            paragraphGenerator();
            System.out.println();
        }
    }
}