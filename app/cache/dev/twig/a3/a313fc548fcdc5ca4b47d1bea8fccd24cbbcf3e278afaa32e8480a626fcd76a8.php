<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f484198884ebabdef6091d5aefc1a1a4a740787291656e8ff245f457d037a9c2 extends Twig_Template
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
        $__internal_5a5b7710ece3c243d01534cb588db963065708cfee428d7d05ca7f05a19aa5b3 = $this->env->getExtension("native_profiler");
        $__internal_5a5b7710ece3c243d01534cb588db963065708cfee428d7d05ca7f05a19aa5b3->enter($__internal_5a5b7710ece3c243d01534cb588db963065708cfee428d7d05ca7f05a19aa5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5a5b7710ece3c243d01534cb588db963065708cfee428d7d05ca7f05a19aa5b3->leave($__internal_5a5b7710ece3c243d01534cb588db963065708cfee428d7d05ca7f05a19aa5b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
