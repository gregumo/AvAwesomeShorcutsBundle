<?php

namespace AppVentus\Awesome\ShortcutsBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class DatePickerType
 *
 * @package Sonata\CoreBundle\Form\Type
 *
 * @author Hugo Briand <briand@ekino.com>
 */
class DateTimePickerType extends BasePickerType
{
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array_merge($this->getCommonDefaults(), array(
            'dp_use_minutes'     => true,
            'dp_use_seconds'     => true,
            'dp_minute_stepping' => 1,
        )));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'datetime';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'awesome_datetime_picker';
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultFormat()
    {
        return DateTimeType::HTML5_FORMAT;
    }
}
