<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_09e8d67b3558839623261c9da87f2567b4d970907e1d207add60f917d760ec92 extends Twig_Template
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
        $__internal_7bb77f535e25d00a91b66a9ecd6b5836bea125eed1bebea84be0e9fdf8937946 = $this->env->getExtension("native_profiler");
        $__internal_7bb77f535e25d00a91b66a9ecd6b5836bea125eed1bebea84be0e9fdf8937946->enter($__internal_7bb77f535e25d00a91b66a9ecd6b5836bea125eed1bebea84be0e9fdf8937946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7bb77f535e25d00a91b66a9ecd6b5836bea125eed1bebea84be0e9fdf8937946->leave($__internal_7bb77f535e25d00a91b66a9ecd6b5836bea125eed1bebea84be0e9fdf8937946_prof);

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
