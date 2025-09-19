import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';
import './style.scss';
import './editor.scss';

registerBlockType('designblokkenwp/row', {
    edit: () => {
        return (
            <div className='db-inner-row'>
                <InnerBlocks />
            </div>
        );
    },
    save: () => {
        return (
            <div className='db-inner-row'>
                <InnerBlocks.Content />
            </div>
        );
    },
});