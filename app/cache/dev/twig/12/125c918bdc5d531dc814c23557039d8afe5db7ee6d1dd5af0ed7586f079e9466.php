<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6f65aa6e362fd30b1c32c86a062d890ad05b0f307974071d7f93c9e93585ce17 extends Twig_Template
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
        $__internal_0a5319f416fb825f30bbfbc267bf6e69b53fadcacf6cef6659811c5aa16c3267 = $this->env->getExtension("native_profiler");
        $__internal_0a5319f416fb825f30bbfbc267bf6e69b53fadcacf6cef6659811c5aa16c3267->enter($__internal_0a5319f416fb825f30bbfbc267bf6e69b53fadcacf6cef6659811c5aa16c3267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0a5319f416fb825f30bbfbc267bf6e69b53fadcacf6cef6659811c5aa16c3267->leave($__internal_0a5319f416fb825f30bbfbc267bf6e69b53fadcacf6cef6659811c5aa16c3267_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
