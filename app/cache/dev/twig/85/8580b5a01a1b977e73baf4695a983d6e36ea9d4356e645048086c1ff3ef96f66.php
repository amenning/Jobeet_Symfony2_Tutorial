<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_9834aac95c2e7fe3729f444f882e3f303180d72918ff1cb778c22cab2f600571 extends Twig_Template
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
        $__internal_f2607b6eecc3476c6b3e53bf548f07b87dcb5325f668aa5c21bfc7e6326ec0b0 = $this->env->getExtension("native_profiler");
        $__internal_f2607b6eecc3476c6b3e53bf548f07b87dcb5325f668aa5c21bfc7e6326ec0b0->enter($__internal_f2607b6eecc3476c6b3e53bf548f07b87dcb5325f668aa5c21bfc7e6326ec0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$v, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f2607b6eecc3476c6b3e53bf548f07b87dcb5325f668aa5c21bfc7e6326ec0b0->leave($__internal_f2607b6eecc3476c6b3e53bf548f07b87dcb5325f668aa5c21bfc7e6326ec0b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!empty($id)): ?>id="<?php echo $view->escape($id) ?>" <?php endif ?>*/
/* <?php foreach ($attr as $k => $v): ?>*/
/* <?php if (in_array($v, array('placeholder', 'title'), true)): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>*/
/* <?php elseif ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
