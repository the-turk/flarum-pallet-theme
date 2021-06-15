import Component from 'flarum/common/Component';

/**
 * The `Separator` component defines a menu separator item.
 */
class Separator extends Component {
  view() {
    return <li className="separator" />;
  }
}

Separator.isListItem = true;

export default Separator;
