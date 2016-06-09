<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a4f7b739607ccbec5fc9f35a579e2640a4d65e8649c186213cc219da993459a3 extends Twig_Template
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
        $__internal_16881902c4de24150acebb2f09249e1eaee2070572dc16c85c23d47804ebad0e = $this->env->getExtension("native_profiler");
        $__internal_16881902c4de24150acebb2f09249e1eaee2070572dc16c85c23d47804ebad0e->enter($__internal_16881902c4de24150acebb2f09249e1eaee2070572dc16c85c23d47804ebad0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_16881902c4de24150acebb2f09249e1eaee2070572dc16c85c23d47804ebad0e->leave($__internal_16881902c4de24150acebb2f09249e1eaee2070572dc16c85c23d47804ebad0e_prof);

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
