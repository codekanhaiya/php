import chatBotService from './chatbotservice.js';
const chatBody = document.querySelector(".chat-body");
const txtInput = document.querySelector("#txtInput");
const send = document.querySelector(".send");
const loadingEle = document.querySelector(".loading")

send.addEventListener("click", () => renderUserMessage());

txtInput.addEventListener("keyup", (event) => {
    if (event.keyCode === 13) {
        renderUserMessage();
    }
});

const renderUserMessage = () => {
    const userInput = txtInput.value;
    renderMesageEle(userInput, "user");
    txtInput.value = "";
    toggleLoading(false);
    // renderChatbotResponse(userInput);
    renderChatbotResponse(userInput);
    // setScrollPosition();
    // toggleLoading(true);
};

const renderChatbotResponse = (userInput) => {
    const res = getChatbotResponse(userInput);
    // renderMesageEle(res);
};

const renderMesageEle = (txt, type) => {
    let className = "user-message";

    const messageEle = document.createElement("div");
    const txtNode = document.createTextNode(txt);

    // messageEle.classList.add(className);
    messageEle.append(txtNode);

    if (type !== "user") {
        className = "chatbot-message";
        messageEle.classList.add(className);
        const botResponseContainer = document.createElement("div");
        botResponseContainer.classList.add("bot-response-container");
        const botImg = document.createElement("img");
        botImg.setAttribute("src", "img/ptimg/robot.png");
        botResponseContainer.append(botImg);
        botResponseContainer.append(messageEle);
        chatBody.append(botResponseContainer);
    }
    else{
        messageEle.classList.add(className);
        chatBody.append(messageEle);
    }
};

const getChatbotResponse = (userInput) => {
    // return chatBotService.getBotResponse(userInput)==undefined
    // ?"Please try something else."
    // : chatBotService.getBotResponse(userInput);
    chatBotService
        .getBotResponse(userInput)
        .then((response) => {
            // console.log(response);
            renderMesageEle(response);
            setScrollPosition();
            toggleLoading(true);
        })
        .catch((error) => {
            toggleLoading(true);
         });
};

const setScrollPosition = () => {
    if (chatBody.scrollHeight > 0) {
        chatBody.scrollTop = chatBody.scrollHeight;
    };
};

const toggleLoading = (show) => loadingEle.classList.toggle("hide", show);