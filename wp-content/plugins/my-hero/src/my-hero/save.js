import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save( { attributes } ) {
	const { title, subtitle, buttonText, buttonUrl, mediaURL } = attributes;
	const blockProps = useBlockProps.save({
		className: 'my-hero',
		style: {
			backgroundImage: mediaURL ? `url(${ mediaURL })` : undefined,
			backgroundSize: 'cover',
			backgroundPosition: 'center',
			padding: '80px 24px',
			borderRadius: '12px'
		}
	});

	return (
		<div { ...blockProps }>
			<RichText.Content tagName="h1" className="my-hero__title" value={ title } />
			<RichText.Content tagName="p" className="my-hero__subtitle" value={ subtitle } />
			<div className="my-hero__cta">
				<a className="wp-block-button__link" href={ buttonUrl }>
					{ buttonText }
				</a>
			</div>
		</div>
	);
}