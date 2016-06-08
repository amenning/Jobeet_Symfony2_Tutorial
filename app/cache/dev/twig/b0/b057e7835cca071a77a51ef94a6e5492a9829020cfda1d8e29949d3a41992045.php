<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e7e616f5ea23dcc2c2de1986e0994b92ad6f3c74ffa7354bf7e8505c62c7fce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b78543b4a9a5074a5b06fa872b295e0668545b8d9a799c00368fb97fcbb326c4 = $this->env->getExtension("native_profiler");
        $__internal_b78543b4a9a5074a5b06fa872b295e0668545b8d9a799c00368fb97fcbb326c4->enter($__internal_b78543b4a9a5074a5b06fa872b295e0668545b8d9a799c00368fb97fcbb326c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b78543b4a9a5074a5b06fa872b295e0668545b8d9a799c00368fb97fcbb326c4->leave($__internal_b78543b4a9a5074a5b06fa872b295e0668545b8d9a799c00368fb97fcbb326c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
