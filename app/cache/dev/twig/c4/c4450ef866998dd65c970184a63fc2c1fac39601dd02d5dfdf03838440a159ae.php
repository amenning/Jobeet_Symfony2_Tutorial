<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_65f54915e05991b1f6752dbb5f1f381e6d806f42596a33ed1dcc31a6d310830f extends Twig_Template
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
        $__internal_1e45dcb33af3d3f5877518aff9836c553361d4c31cfa6cd975d46636ad4e85f2 = $this->env->getExtension("native_profiler");
        $__internal_1e45dcb33af3d3f5877518aff9836c553361d4c31cfa6cd975d46636ad4e85f2->enter($__internal_1e45dcb33af3d3f5877518aff9836c553361d4c31cfa6cd975d46636ad4e85f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1e45dcb33af3d3f5877518aff9836c553361d4c31cfa6cd975d46636ad4e85f2->leave($__internal_1e45dcb33af3d3f5877518aff9836c553361d4c31cfa6cd975d46636ad4e85f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
