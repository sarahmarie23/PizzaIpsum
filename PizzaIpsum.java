import java.util.*;
public class PizzaIpsum {
    private static Random RANDOM = new Random();
    
    public static void main(String[] args) {
        System.out.println("How many paragraphs would you like?");
        Scanner input = new Scanner(System.in);
        int paragraphCount = input.nextInt();
        String pizzaWords[] = new String[] {"pizza", "dough", "pepperoni", "pizza hut", "oven", "mozzarella", "cheese", "sauce", "pineapple", "mushrooms", "olives", "peppers"};
        generatePage(paragraphCount, pizzaWords);   
    }
        
    public static void generateSentence (String pizzaWords[]) {
        int MAX_SENTENCE_LENGTH = RANDOM.nextInt (9-3 +1);
        String firstWord = capitalizeFirstWord(pizzaWords, MAX_SENTENCE_LENGTH);
        System.out.print(firstWord);
    
        for(int word = 0; word < MAX_SENTENCE_LENGTH; word++){
            System.out.print(" " + pizzaWords[word]);
        }
        System.out.print(". ");
    }
    
    public static String capitalizeFirstWord(String pizzaWords[], int MAX_SENTENCE_LENGTH) {
        String firstWord = pizzaWords[MAX_SENTENCE_LENGTH].substring(0, 1).toUpperCase() + pizzaWords[MAX_SENTENCE_LENGTH].substring(1);
        return firstWord;
    }
    
    public static void generateParagraph(String pizzaWords[]) {
        int MAX_PARAGRAPH_LENGTH = RANDOM.nextInt (12-4 +1);
        for(int sentence = 0; sentence < MAX_PARAGRAPH_LENGTH; sentence++) {
            generateSentence(pizzaWords);
        }
    }
    
    public static void generatePage (int paragraphCount, String pizzaWords[]) {
        for(int paragraph = 0; paragraph < paragraphCount; paragraph++) {
            generateParagraph(pizzaWords);
            System.out.println();
        }
    }
}