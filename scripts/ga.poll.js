function GAPoll (pollName, question, comment, pollOption1, pollOption2, container) {
    this.gaPoll = "GA-Poll";

    this.pollName = pollName;
    this.question = question;
    this.comment = comment;
    
    this.pollOption1 = pollOption1;
    this.pollOption1Id = (this.gaPoll + "-" + this.pollName + "-" + this.pollOption1).replace(/\s/g, '');
    this.pollOption2 = pollOption2;
    this.pollOption2Id = (this.gaPoll + "-" + this.pollName + "-" + this.pollOption2).replace(/\s/g, '');

    this.container = container;
    
    jQuery(container).loadTemplate("../wp-content/themes/tvzwingen.ch-master/templates/poll.html",
    {
        pollName: this.pollName,
        question: this.question,
        comment: this.comment,
        option1Id: this.pollOption1Id,
        option1: this.pollOption1,
        option2Id: this.pollOption2Id,
        option2: this.pollOption2
    });
}