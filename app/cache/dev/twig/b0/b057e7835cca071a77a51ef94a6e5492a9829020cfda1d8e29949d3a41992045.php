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
        $__internal_dbe4a03ac4012a47e6084d1f9adaa7b03bb8206e5f3fa1d7c1e08c6e2feb23dd = $this->env->getExtension("native_profiler");
        $__internal_dbe4a03ac4012a47e6084d1f9adaa7b03bb8206e5f3fa1d7c1e08c6e2feb23dd->enter($__internal_dbe4a03ac4012a47e6084d1f9adaa7b03bb8206e5f3fa1d7c1e08c6e2feb23dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dbe4a03ac4012a47e6084d1f9adaa7b03bb8206e5f3fa1d7c1e08c6e2feb23dd->leave($__internal_dbe4a03ac4012a47e6084d1f9adaa7b03bb8206e5f3fa1d7c1e08c6e2feb23dd_prof);

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
