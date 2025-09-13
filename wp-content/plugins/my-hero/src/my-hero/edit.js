import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, InspectorControls, RichText, URLInputButton } from '@wordpress/block-editor';
import { PanelBody, Button, TextControl } from '@wordpress/components';

export default function Edit( { attributes, setAttributes } ) {
	const { title, subtitle, buttonText, buttonUrl, mediaURL } = attributes;
	const blockProps = useBlockProps({
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
		<>
			<InspectorControls>
				<PanelBody title={ __('Hero settings', 'my-hero-block') } initialOpen={ true }>
					<MediaUpload
						onSelect={ ( media ) => setAttributes({ mediaURL: media.url }) }
						render={ ( { open } ) => (
							<Button variant="secondary" onClick={ open }>{ __('Chọn ảnh nền', 'my-hero-block') }</Button>
						) }
					/>
					<TextControl
						label={ __('Button URL', 'my-hero-block') }
						value={ buttonUrl }
						onChange={ ( v ) => setAttributes({ buttonUrl: v }) }
					/>
				</PanelBody>
			</InspectorControls>

			<div { ...blockProps }>
				<RichText
					tagName="h1"
					className="my-hero__title"
					value={ title }
					onChange={ ( v ) => setAttributes({ title: v }) }
					placeholder={ __('Nhập tiêu đề…', 'my-hero-block') }
				/>
				<RichText
					tagName="p"
					className="my-hero__subtitle"
					value={ subtitle }
					onChange={ ( v ) => setAttributes({ subtitle: v }) }
					placeholder={ __('Nhập mô tả…', 'my-hero-block') }
				/>
				<div className="my-hero__cta">
					<RichText
						tagName="a"
						className="wp-block-button__link"
						value={ buttonText }
						onChange={ ( v ) => setAttributes({ buttonText: v }) }
						onSplit={ () => null }
						placeholder={ __('Nhãn nút…', 'my-hero-block') }
						allowedFormats={ [] }
						attributes={{ href: buttonUrl }}
					/>
					<URLInputButton
						url={ buttonUrl }
						onChange={ ( url ) => setAttributes({ buttonUrl: url }) }
					/>
				</div>
			</div>
		</>
	);
}