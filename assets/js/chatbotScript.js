document.addEventListener("DOMContentLoaded", () => {
    const chatField = document.getElementById("chatField")

    const question = [
        ["how are you","how is life","how are things"], // -- 1 -- //  
        ["hi","hey","hello","good morning","good afternoon"],   // -- 2 -- //
        ["what are you doing","what is going on","what is up"], // -- 3 -- //
        ["how old are you"],    // -- 4 -- //
        ["who are you","are you human","are you bot","are you human or bot"],   // -- 5 -- //
        ["who created you","who made you"], // -- 6 -- //
        ["your name please","your name","may i know your name","what is your name","what call yourself"],   // -- 7 -- //
        ["happy","good","fun","wonderful","fantastic","cool"],  // -- 8 -- //
        ["bad","bored","tired"],    // -- 9 -- //
        ["help me","tell me story","tell me joke"], // -- 10 -- //
        ["ah","yes","ok","okay","nice"],    // -- 11 -- //
        ["bye","good bye","goodbye","see you later"],   // -- 12 -- //
        ["what should i eat today"],    // -- 13 -- //
        ["what","why","how","where","when"],    // -- 14 -- //
        ["no","not sure","maybe","no thanks"],  // -- 15 -- //
        [""],   // -- 16 -- //
        ["haha","ha","lol","hehe","funny","joke"],   // -- 17 -- //
        ["do you eat the mulet"],   // -- 18 -- //
        ["do you eat your epinard gros connard"]   // -- 19 -- //
    ]

    const answers = [
        ["Fine... how are you?","Pretty well, how are you?","Fantastic, how are you?"], // -- 1 -- //
        ["Hello!","Hi!","Hey!","Hi there!","Howdy"],    // -- 2 -- //
        ["Nothing much","About to go to sleep","Can you guess?","I don't know actually"],   // -- 3 -- //
        ["I am infinite"],  // -- 4 -- //
        ["I am just a bot","I am a bot. What are you?"],    // -- 5 -- //
        ["The one true God, JavaScript"],   // -- 6 -- //
        ["I am nameless","I don't have a name"],    // -- 7 -- //
        ["Have you ever felt bad?","Glad to hear it"],  // -- 8 -- //
        ["Why?","Why? You shouldn't!"], // -- 9 -- //
        ["What about?","Once upon a time..."],  // -- 10 -- //
        ["Tell me a story","Tell me a joke","Tell me about yourself"],  // -- 11 -- //
        ["Bye","Goodbye","See you later"],  // -- 12 -- //
        ["Pasta","Burger"], // -- 13 -- //
        ["Great question"], // -- 14 -- //
        ["That's ok","What do you want to talk about?"],    // -- 15 -- //
        ["Please say something :("],    // -- 16 -- //
        ["Haha!","Good one!"],   // -- 17 -- //
        ["Yes I do","Of course it's delicious :)","Yes sometimes, but do you eat your épinard gros connard?"],   // -- 18 -- //
        ["Yes I do","Of course it's delicious :)"]   // -- 19 -- //
    ]

    const alternatives = ["Go on...","Try again","I don't understand","Can you repeat the question ?"]

    chatInput.addEventListener("keydown", (e) => {
        if (e.code === "Enter") {
            let input = chatInput.value
            chatInput.value = ""
            output(input)
        }
    })

    function output(input) {
        let product
        let text = input.toLowerCase().replace(/[^\w\s\d]/gi, "")
        text = text
        .replace(/ a /g, " ")
        .replace(/whats/g, "what is")
        .replace(/please /g, "")
        .replace(/ please/g, "")
        .replace(/r u/g, "are you")
    
        if (compare(question, answers, text)) {
            product = compare(question, answers, text)
        } else {
            product = alternatives[Math.floor(Math.random() * alternatives.length)]
        }
        
        addChatEntry(input, product)
    }
    
    function compare(questionArray, answersArray, string) {
        let reply
        let replyFound = false

        for (let x = 0; x < questionArray.length; x++) {
            for (let y = 0; y < questionArray[x].length; y++) {
                if (questionArray[x][y] === string) {
                    let replies = answersArray[x]
                    reply = replies[Math.floor(Math.random() * replies.length)]
                    replyFound = true
                    break
                }
            }

            if (replyFound) {
                break
            }
        }

        return reply
    }
    
    function addChatEntry(input, product) {
        let userDiv = document.createElement("div")
        let botDiv = document.createElement("div")
        let botText = document.createElement("span")

        userDiv.id = "user"
        userDiv.className = "user response"
        userDiv.innerHTML = `<span>${input}</span>`
        chatField.appendChild(userDiv)
        botDiv.id = "bot"
        botDiv.className = "bot response"
        botText.innerText = "Typing..."
        botDiv.appendChild(botText)
        chatField.appendChild(botDiv)
        
        chatField.scrollTop = chatField.scrollHeight - chatField.clientHeight
        
        setTimeout(() => {
            botText.innerText = `${product}`
        }, 1000)
    }
})