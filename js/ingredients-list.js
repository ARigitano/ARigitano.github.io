console.log("yoyo");

class IngredientsList extends React.Component {
    constructor(props) {
        super(props);

        this.state = {

        }
    }

    render() {
        return React.createElement('div', {className: 'ingredients'}, '<?php echo \"haha\"; ?>');
    }
}

document.querySelectorAll('span.react-ingredients').forEach(function(span){
    ReactDOM.render(React.createElement(IngredientsList), span);
})